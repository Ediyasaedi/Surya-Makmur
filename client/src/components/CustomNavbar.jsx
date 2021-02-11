import React from "react";
import { Container, Navbar } from "react-bootstrap";

export default function CustomNavbar() {
  return (
    <Navbar expand="lg" variant="light" bg="bg bg-light">
      <Container fluid>
        <Navbar.Brand href="#">Sukma Store</Navbar.Brand>
      </Container>
    </Navbar>
  );
}
