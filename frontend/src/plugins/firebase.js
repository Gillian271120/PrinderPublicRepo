import {initializeApp} from "firebase/app";
import 'firebase/auth';

var firebaseConfig = {
  apiKey: "AIzaSyDLcKSJKjT-Wy9EWuzBKZ16hGEP1O5d25A",
  authDomain: "finapp-9d7cb.firebaseapp.com",
  projectId: "finapp-9d7cb",
  storageBucket: "finapp-9d7cb.appspot.com",
  messagingSenderId: "669570837837",
  appId: "1:669570837837:web:77411f88158d3758b95b04",
  measurementId: "G-XS28RMB6HG"
};
const Firebase = initializeApp(firebaseConfig);

export default Firebase