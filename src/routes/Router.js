import React from "react";
import { Routes, Route } from "react-router-dom"
import { Home } from "../view/index"

function Router () {
    return (
        <Routes>
            <Route path="/" Component={Home} />
        </Routes>
    )
}

export default Router;