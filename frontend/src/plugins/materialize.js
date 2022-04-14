/**
 * plugins/materialize.js
 */
import M from 'materialize-css'
import 'materialize-css/dist/css/materialize.css'

export async function loadMaterialize () {
    document.addEventListener('DOMContentLoaded', function() {
        M.AutoInit(undefined);
    });
}
