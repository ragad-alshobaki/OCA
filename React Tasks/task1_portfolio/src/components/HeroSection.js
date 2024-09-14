import image from '../images/resume.png';
import resume from '../Doc/RagadAlshobakiResume.pdf';

export default function HeroSection() {
    return(
        <section id="home" className="mainsec">
            <div>
                <img className="r_img" src={image} alt="r_image" />
            </div>
            <div className="r_div">
                <h1>Hello, I'm Ragad Alshobaki</h1>
                <h6>Intern at OCA - Full-Stack Web Development BootCamp - 4<sup>th</sup> Cohort</h6>
                <br />
                <a href={resume} target="_blank" rel="noreferrer">
                    <button id="button" type="button" class="btn btn-outline-secondary">My CV</button>
                </a>
            </div>
        </section>
    );
}