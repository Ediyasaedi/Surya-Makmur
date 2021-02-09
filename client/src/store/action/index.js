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
        console.log(data, "<< di action");
        dispatch(setProducts(data));
      })
      .catch(console.log);
  };
};
