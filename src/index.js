import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import React from "react"
import ReactDOM from "react-dom"

const person1 = new Person("Brad")
if (document.querySelector("#render-react-example-here")) {
  ReactDOM.render(<ExampleReactComponent />, document.querySelector("#render-react-example-here"))
}

//MENU
var menu = document.getElementById('manu4');
function toggleMenu() {
    manu4.classList.toggle('hidden');
    manu4.classList.toggle('w-full');
    manu4.classList.toggle('h-screen');
}
