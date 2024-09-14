import JU from '../images/University_of_Jordan_Logo.svg.png'
import HTU from '../images/HTU_Logo-250px.png'
import ADC from '../images/ADC.png'

export default function Education() {
    return(
        <section>
            <h4 id="education" style={{padding: "40px"}}>Education</h4>
            <div className="eduContainer">
                <div className="eduContainer car_div">
                    <div className="card" style={{textAlign: "center"}}>
                        <div>
                            <img className="c_img" src={JU} alt="JU" />
                            <h4><strong>University of Jordan, Computer Information Systems, Bachelor’s Degree</strong></h4>
                            <p>2016-2 - 2020-6</p>
                            <p>Graduation project: Face Recognition Model for student attendance management using Deep
                                learning algorithm (CNN) in a python programing language.</p>
                        </div>
                    </div>
                    <div className="card">
                        <div>
                            <img className="c_img" src={HTU} alt="HTU" />
                            <h4><strong>AL Hussein technical university (HTU)</strong></h4>
                            <p>2020-10 - 2021-1</p>
                            <p>The National ICT Upskilling Program (6th Cohort) – Python & Advanced Data Structure. Web Application
                                Development. Using GitHub for Version Control.</p>
                        </div>
                    </div>
                    <div className="card">
                        <div>
                            <img className="c_img" src={ADC} alt="ADC" />
                            <h4><strong>ADC - Aqaba Development Corporation (University training)</strong></h4>
                            <p>2019-7 – 2019-8</p>
                            <ul>
                                <li>Technical Support System</li>
                                <li>Simple description of the user interface of the system.</li>
                                <li>Describe "Office 365" services.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}