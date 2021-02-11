// Sample card from Airbnb
import React from "react";
import { Card, Button, Row, Col } from "react-bootstrap";

export default function CustomCard({ prd }) {
  let bprice =
    parseInt(prd.price) - (parseInt(prd.price) * parseInt(prd.discount)) / 100;
  return (
    <Card style={{ width: "24rem", padding: "1rem", marginTop: "1rem" }}>
      <Row>
        <Col>
          <Card.Img src={prd.img_url} />
        </Col>
        <Col>
          <Card.Body>
            <Card.Title>{prd.name}</Card.Title>
            <Card.Text>
              <p>Stock: {prd.stock}</p>
              {prd.discount > 0 ? (
                <div>
                  <p style={{ textDecoration: "line-through" }}>
                    Price: {prd.price}
                  </p>
                  <p>Disc: {prd.discount}%</p>
                  <p>Best Price: {bprice}</p>
                </div>
              ) : (
                <p>Price: {prd.price}</p>
              )}
            </Card.Text>
            <Row>
              <Button
                variant="primary"
                size="sm"
                style={{ marginRight: "0.1rem" }}
              >
                Detail
              </Button>
              <Button variant="success" size="sm">
                Add To Cart
              </Button>
            </Row>
          </Card.Body>
        </Col>
      </Row>
    </Card>
  );
}
