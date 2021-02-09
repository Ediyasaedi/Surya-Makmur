import React from "react";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Product from "./pages/Product";
import Favorite from "./pages/Favorite";

function App() {
  return (
    <Router>
      <Switch>
        <Route path="/favorites">
          <Favorite />
        </Route>
        <Route path="/">
          <Product />
        </Route>
      </Switch>
    </Router>
  );
}

export default App;
