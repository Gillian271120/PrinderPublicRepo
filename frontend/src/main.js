import { createApp } from 'vue'
import { loadFonts } from './plugins/webfontloader'
import { loadMaterialize } from './plugins/materialize'
import App from "./App";
import Router from './router'

loadFonts()
loadMaterialize()

const app = createApp(App).use(Router)


app.mount('#app')
