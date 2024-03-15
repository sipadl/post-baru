import React from "react";
import { Routes, Route } from "react-router-dom"
import { Home, Landing, Laravel } from "../view/index"
import { NavbarComponent } from "../view/Component/index";

function Router () {
    return (
        <div className="container">
         <NavbarComponent config={{logos:'https://picsum.photos/40/40', link:[
                {
                    url:'/',
                    name:'Home'
                },
                {
                    url:'/crud/laravel',
                    name:'Laravel'
                },
                {
                    url:'/b',
                    name:'B'
                },
            ]}} />
        <Routes>
            <Route path="/" Component={Home} />
            <Route path="/landing" Component={Landing} />
            <Route path="/crud/laravel" Component={Laravel} />
        </Routes>
        </div>
    )
}

export default Router;