import { SET_PRODUCTS, SET_FAVORITES } from "../action/action-types";

const initState = {
  products: [],
  favorites: [],
};

export default function usersState(state = initState, action) {
  switch (action.type) {
    case SET_PRODUCTS:
      return (state = { ...state, products: action.payload });
    case SET_FAVORITES:
      return (state = { ...state, favorites: action.payload });
    default:
      return state;
  }
}
