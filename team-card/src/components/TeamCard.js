
import styled from 'styled-components';

const TeamCardWrapper=styled.div`
max-width:90%;
@media (min-width: 610px){
    max-width:80%;
  }
  @media (min-width: 768px){
    width: 45%;
  }
  @media (min-width: 992px){
    width: 30%;
  }
    margin:20px auto;
`;
const Card=styled.div`
    font-falmily:'Nunito',sans-serif;
    position:relative;
    border-radius: 20px;
    min-height: 350px;
    
    font-size: large;
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175);
    & .user-picture {
        position: absolute;
        height:100%;
        width:100%;
        top: 0;
        right: 0;
        background-size: cover;
        background-position: center top;
        background-repeat: no-repeat;
        border-radius: 20px;
        transition: all 0.5s ease-in-out;
    }
    &:hover .user-picture{
        position: absolute;
        z-index:2;
        top: -40px;
        right: 30px;
        padding: 10px;
        height: 100px;
        width: 100px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 60px;
    } 
    & .description{
        font-size:17px;
        font-weight:600;
        color: rgb(82, 81, 81);
    }
    h4{
        font-size:1.5rem;
        margin-bottom: .5rem;
        font-weight: 700;
        line-height: 1.2;
        margin-top:0;
    }
    & .role{
        font-size:18px;
        font-weight:800;
        margin-top:0;
    }
    & .icon{
        color: black;
        padding: 12px;
        width: 19px;
        text-align: center;
        text-decoration: none;
        border-radius: 50%;
        transition: all 500ms;
    }
    & .icon:hover{
        color:white;
        background-color:black;
    }
    & .user-name{
        max-width:60%;
    }
    
`;
const CardBody=styled.div`
    padding:25px;
`;

function TeamCard(props){
    return(
        <TeamCardWrapper>
            <Card>
                <CardBody>
                    <div className="user-picture" style={{backgroundImage: `url(${props.image})`}}></div>
                    <div className="user-content">
                        <h4 className="user-name">Carry Johnshon</h4>
                        <p className="role">Web developer</p>
                        <div>
                            <a target="_blank" rel="noreferrer" href={props.facebook}><i className="icon fab fa-facebook-f"></i></a>
                            <a target="_blank" rel="noreferrer" href={props.mail}><i className="icon fas fa-envelope"></i></a>
                            <a target="_blank" rel="noreferrer" href={props.linkedin}><i className="icon fab fa-linkedin-in"></i></a>
                            <a target="_blank" rel="noreferrer" href={props.github}><i className="icon fab fa-github"></i></a>
                        </div>
                        <p className="description">{props.description}</p>
                    </div>
                </CardBody>
            </Card>
        </TeamCardWrapper>
    );
}
export default TeamCard;