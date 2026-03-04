import React, { Fragment, useEffect, useState } from 'react';
import { BrowserRouter, Route, Switch, Link } from 'react-router-dom';
import {AppRoute} from '../../const';
import PropTypes from 'prop-types';
import Main from '../pages/main/main';
import SignIn from '../pages/signin/signin';
import MyList from '../pages/mylist/mylist';
import Film from '../pages/film/film';
import Review from '../ui/review/review';
import Player from '../pages/player/player';
import filmProp from '../ui/card/card.prop';
import reviewProp from '../ui/review/review.prop';
import {getFilm, getReviews} from '../../utils/utils';


function App(props) {
    const [films, setFilms] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    const adaptToClient = (film) => ({
        id: film.id,
        name: film.name,
        posterImage: film.preview_image,
        previewImage: film.preview_image,
        backgroundImage: film.background_image,
        backgroundColor: film.background_color,
        videoLink: film.video_link,
        previewVideoLink: film.preview_video_link,
        description: film.description,
        rating: film.rating,
        scoresCount: film.scores_count,
        director: film.director,
        starring: film.starring,
        runTime: film.run_time,
        genre: film.genre,
        released: film.released,
        isFavorite: film.is_favorite,
        isPromo: film.is_promo,
    });

    useEffect(() => {
        async function fetchFilms() {
            try {
                const response = await fetch('http://127.0.0.1:8000/api/films');
                if (!response.ok) {
                    throw new Error(`Ошибка загрузки фильмов: ${response.status}`);
                }
                const data = await response.json();

                const adaptedFilms = data.data.map(adaptToClient);

                setFilms(adaptedFilms);
            } catch (err) {
                setError(err.message);
            } finally {
                setLoading(false);
            }
        }

        fetchFilms();
    }, []);

    if (loading) {
        return <div>Загрузка фильмов...</div>;
    }

    if (error) {
        return <div>Ошибка: {error}</div>;
    }

  const {reviews, name, genre, year} = props;
  return (
    <BrowserRouter>
      <Switch>
        <Route path="/" exact >
          <Main films={films} name={name} genre={genre} year={year} />
        </Route>
        <Route path="/login" exact component={SignIn} />
        <Route path="/mylist" exact >
          <MyList films={films} />
        </Route>
        <Route
          exact path={`${AppRoute.FILM}/:id`}
          render={(data) => (
            <Film
              film={getFilm(films, data.match.params.id)}
              films={films}
              reviews={reviews}
            />)}
        />
        <Route
          exact path={`${AppRoute.FILM}/:id/review`}
          render={(data) => (
            <Review
              review={getReviews(reviews, data.match.params.id)}
            />)}
        />
        <Route
          exact path={`${AppRoute.PLAYER}/:id`}
          render={(data) => (
            <Player
              film={getFilm(films, data.match.params.id)}
            />
          )}
        />
        <Route
          render={() => (
            <Fragment>
              <h1>
                404.
                <br />
                <small>Page not found</small>
              </h1>
              <Link to="/">Go to main page</Link>
            </Fragment>
          )}
        />
      </Switch>
    </BrowserRouter>
  );
}

App.propTypes = {
  films: PropTypes.arrayOf(filmProp).isRequired,
  reviews: PropTypes.arrayOf(reviewProp).isRequired,
  name: PropTypes.string.isRequired,
  genre: PropTypes.string.isRequired,
  year: PropTypes.number.isRequired,
};

export default App;
