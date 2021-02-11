import { Row, Container, Col } from "react-bootstrap";
import React, { useEffect } from "react";
import CustomCard from "./CustomCard";
import { useDispatch, useSelector } from "react-redux";
import { getProducts } from "../store/action/index";

export default function ProductContainer(props) {
  const products = useSelector((state) => state.product.products);
  const dispatch = useDispatch();

  useEffect(() => {
    dispatch(getProducts());
  }, []);
  return (
    <Container style={{ marginTop: "1rem" }}>
      <Row>
        {products.map((prd) => {
          return (
            <Col>
              <CustomCard prd={prd} />
            </Col>
          );
        })}
      </Row>
    </Container>
  );
}
