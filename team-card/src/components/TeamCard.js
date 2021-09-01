import  "../bootstrap.min.css";
import "./TeamCard.css";
function TeamCard(props){
    return(
        <div className="col-lg-4 col-md-6 mb-4 pt-5">
                    <div className="card shadow-lg border-0" data-aos="zoom-out" data-aos-delay="100">
                        <div className="card-body">
                            <div className="user-picture" style={{backgroundImage: `url(${props.image})`}}></div>
                            <div className="user-content">
                                <h5 className="text-capitalize user-name">Carry Johnshon</h5>
                                <p className=" text-capitalize text-muted small blockquote-footer">Web developer</p>
                                <div>
                                    <a target="_blank" rel="noreferrer" href={props.facebook}><i className="fab fa-facebook-f"></i></a>
                                    <a target="_blank" rel="noreferrer" href={props.mail}><i className="fas fa-envelope"></i></a>
                                    <a target="_blank" rel="noreferrer" href={props.linkedin}><i className="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" rel="noreferrer" href={props.github}><i className="fab fa-github"></i></a>
                                </div>
                                <p className="small text-muted mb-0">{props.description}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    );
}
export default TeamCard;