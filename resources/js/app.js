/*import '../css/app.css';*/   /*ТЕСТ h1 150px*/

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
/*import '../assets/admin/css/adminlte.css';*/
import './bootstrap';
import store from './store'
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */
import FilmComponent from './components/FilmComponent.vue'
import ViewsComponent from "./components/ViewsComponent.vue";
import LikesComponent from "./components/LikesComponent.vue";
import CommentsComponent from './components/CommentsComponent.vue'
import CommComponent from './components/CommComponent.vue'

/*const app = createApp({});*/
const app = createApp({});

/*import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);*/

app.component('film-component', FilmComponent)
app.component('views-component', ViewsComponent)
app.component('likes-component', LikesComponent)
app.component('comments-component', CommentsComponent)
app.component('comm-component', CommComponent)


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.use(store)

app.mount('#app');
