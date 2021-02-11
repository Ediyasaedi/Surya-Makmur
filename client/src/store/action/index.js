import axios from "axios";
import { SET_PRODUCTS } from "./action-types";

const baseUrl = "http://localhost:8000";
// const baseUrl = "http://149.129.235.117/"

export const setProducts = (payload) => {
  return {
    type: SET_PRODUCTS,
    payload,
  };
};

export const getProducts = (payload) => {
  return (dispatch) => {
    axios
      .get(`${baseUrl}/api/products`)
      .then(({ data }) => {
        console.log(typeof data["data"], "<<< di action");
        dispatch(setProducts(data["data"]));
      })
      .catch(console.log);
  };
};
