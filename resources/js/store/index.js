import { createApp } from 'vue'
import Vuex from 'vuex'


/*import * as film from './modules/film.js'
import {state} from "./modules/film.js";*/


/*Vue.use(Vuex)*/
createApp().use(Vuex)


export default new Vuex.Store({
    state: {
        film: {
            //додано 3 урок
            comments: [],
            statistic: {
                likes: 0,
                views: 0
            }
            //додано 3 урок
        },
        slug: '',
        likeIt: true,
        commentSuccess: false,
        errors: []
    },
    actions: {
        getFilmData(context, payload) {
            /*console.log('context', context);
            console.log('context', payload);*/
            axios.get('/api/film-json', {params: {slug:payload}}).then((response)=>{
                context.commit('SET_FILM', response.data.data);
            }).catch(()=>{
                console.log('Error');
            });
        },
        viewsIncrement(context, payload) {
            setTimeout(() => {
                axios.put('/api/film-views-increment', {slug:payload}).then((response) => {
                    context.commit('SET_FILM', response.data.data);
                }).catch(() =>{
                    console.log('Ошибка');
                });
            }, 5000)
        },
        addLike(context, payload) {
                axios.put('/api/film-likes-increment', {slug:payload.slug, increment:payload.increment }).then((response) =>{
                    context.commit('SET_FILM', response.data.data);
                    context.commit('SET_LIKE', !context.state.likeIt)
                }).catch(() =>{
                    console.log('Ошибка addLike');
                });
            console.log("После клика по кнопке", context.state.likeIt);
        },
        addComment(context, payload){
            axios.post('/api/film-add-comment', { subject:payload.subject, body:payload.body, film_id:payload.film_id, user_id:payload.user_id}).then((response) =>{
                context.commit('SET_COMMENT_SUCCESS', !context.state.commentSuccess);
                context.dispatch('getFilmData', context.state.slug)
            }).catch((error)=>{
                if(error.response.status === 422) {
                    context.state.errors = error.response.data.errors;
                }
            });
        }
    },

    getters: {
        // додано 3 урок 6:55
        filmViews(state) {
            return state.film.statistic.views;

             /*if(state.film.static) {
                 return state.film.static.views;        залишено (помилки в консолі зникають не одразу після перезавантаження сторінки)
             }*/
        },

        filmLikes(state) {
            return state.film.statistic.likes;

            /* видалено 3 урок
            if(state.film.static) {
                return state.film.static.likes;         залишено (помилки в консолі зникають не одразу після перезавантаження сторінки)
            }*/
        }
        // додано 3 урок 6:55
    },
    mutations: {
        SET_FILM(state, payload) {
            return state.film = payload;
        },
        SET_SLUG(state, payload) {
            return state.slug = payload;
        },
        SET_LIKE(state, payload) {
            return state.likeIt = payload;
        },
        SET_COMMENT_SUCCESS(state, payload) {
            state.commentSuccess = payload;
        }
    }
})























/* 1 урок

import { createApp } from 'vue'
import Vuex from 'vuex'



/!*Vue.use(Vuex)*!/
createApp().use(Vuex)

export default new Vuex.Store({
    state: {
        firstname:'Jhon',
        lastname:'Jayson'
    },

    actions: {
        testAction(context, payload) {
            context.commit('SET_FIRSTNAME', response.data.name)
            context.commit('SET_LASTNAME', response.data.lastname)
        }
    },

    getters: {
        getFullName(state) {
            return state.firstname + ' ' + state.lastname;
        },
    },

    mutations: {
        SET_FIRSTNAME(state, payload)
        {
            state.firstname = payload;
        },
        SET_LASTNAME(state, payload)
        {
            state.lastname = payload;
        },
    }
})*/























/*Кінцевий варіант Шматов Оригінал
import Vue from 'vue'
import Vuex from 'vuex'

/!*import * as film from './modules/film.js'*!/

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        film
    },
    state: {
        slug: '',
    },
    actions: {

    },
    getters: {
        filmSlugRevers(state) {
            return state.slug.split('').reverse().join('');
        },
    },
    mutations: {
        SET_SLUG(state, payload) {
            state.slug = payload;
        }
    }
})*/

