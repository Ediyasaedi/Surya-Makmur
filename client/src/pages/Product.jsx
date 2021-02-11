import React from "react";
import CustomNavbar from "../components/CustomNavbar";
import ProductContainer from "../components/ProductContainer";
import { Container } from "react-bootstrap";

function Product() {
  return (
    <Container fluid>
      <CustomNavbar />
      <ProductContainer />
    </Container>
  );
}

export default Product;
