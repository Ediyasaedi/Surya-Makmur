import React, { useEffect } from "react";
import { useDispatch, useSelector } from "react-redux";
import { getProducts } from "../store/action/index";
import { Flex } from "@chakra-ui/react";

function Product() {
  const products = useSelector((state) => state.product.products);
  const dispatch = useDispatch();

  useEffect(() => {
    dispatch(getProducts());
    console.log(products);
  }, []);

  return (
    <Flex>
      <h1>Product Page</h1>
    </Flex>
  );
}

export default Product;
