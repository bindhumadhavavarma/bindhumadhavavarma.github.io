import React from "react";
import styled from "styled-components";
import TeamCard from "./components/TeamCard";
const Container=styled.div`
  @import url('https://fonts.googleapis.com/css2?family=Nunito');
  font-style:'Nunito',sans-serif;
  padding-bottom: .5rem;
  padding-top: 3rem;
  max-width:100%
  @media (min-width: 576px){
    max-width: 540px;
  }
  @media (min-width: 768px){
    max-width: 720px;
  }
  @media (min-width: 992px){
    max-width: 960px;
  }
  @media (min-width: 1200px) {
    max-width: 1140px;
  }
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
`;
const Row=styled.div`
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
`;
function App() {
  return (
    <React.Fragment>
      <section>
        <Container>
            <Row>
            <TeamCard image="https://bindhumadhav.in/temp/images/1.jpg"
             facebook="https://www.facebook.com/bindumadhava.varma/"
             mail="mailto:bindhu.19bcd7116@vitap.ac.in"
             linkedin="https://www.linkedin.com/in/bindhu-madhav-varma-c-58140b1aa/"
             github="https://github.com/BINDHUMADHAVAVARMA"
             description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum quia
             commodi."></TeamCard>
              <TeamCard image="https://bindhumadhav.in/temp/images/1.jpg"
             facebook="https://www.facebook.com/bindumadhava.varma/"
             mail="mailto:bindhu.19bcd7116@vitap.ac.in"
             linkedin="https://www.linkedin.com/in/bindhu-madhav-varma-c-58140b1aa/"
             github="https://github.com/BINDHUMADHAVAVARMA"
             description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum quia
             commodi."></TeamCard>
              <TeamCard image="https://bindhumadhav.in/temp/images/1.jpg"
             facebook="https://www.facebook.com/bindumadhava.varma/"
             mail="mailto:bindhu.19bcd7116@vitap.ac.in"
             linkedin="https://www.linkedin.com/in/bindhu-madhav-varma-c-58140b1aa/"
             github="https://github.com/BINDHUMADHAVAVARMA"
             description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum quia
             commodi."></TeamCard>
              <TeamCard image="https://bindhumadhav.in/temp/images/1.jpg"
             facebook="https://www.facebook.com/bindumadhava.varma/"
             mail="mailto:bindhu.19bcd7116@vitap.ac.in"
             linkedin="https://www.linkedin.com/in/bindhu-madhav-varma-c-58140b1aa/"
             github="https://github.com/BINDHUMADHAVAVARMA"
             description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum quia
             commodi."></TeamCard>
              <TeamCard image="https://bindhumadhav.in/temp/images/1.jpg"
             facebook="https://www.facebook.com/bindumadhava.varma/"
             mail="mailto:bindhu.19bcd7116@vitap.ac.in"
             linkedin="https://www.linkedin.com/in/bindhu-madhav-varma-c-58140b1aa/"
             github="https://github.com/BINDHUMADHAVAVARMA"
             description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum quia
             commodi."></TeamCard>
            </Row>
        </Container>
      </section>
    </React.Fragment>
  );
}

export default App;
