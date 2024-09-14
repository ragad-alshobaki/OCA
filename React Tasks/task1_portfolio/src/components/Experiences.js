import GIA from '../images/GIA.jpg';
import OCA from '../images/OCA.jpg';

export default function Experiences() {
    return(
        <section style={{backgroundColor: "#393E46"}}>
            <h4 style={{padding: "40px"}}>Experiences</h4>
            <div id="experiances">
                <div className="card">
                    <div>
                        <img class="c_img" src={GIA} alt="GIA" />
                        <h4><strong>GIA Apparels Industry</strong></h4>
                        <ul>
                            <li>Production Data Entry & Coordinator</li>
                            <p>2021-12 - 2022-8</p>
                            <li>Planning Assistant</li>
                            <p>2022-9 - 2024-5</p>
                            <ul>
                                <li>Reporting to Planning, Production, Plant and General Managers</li>
                                <li>WFX, ERP system</li>
                                <li>Styles follow up (Fabric & Trims to Shipment)</li>
                                <li>PO priorities tracking</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div className="card">
                    <div>
                        <img class="c_img" src={OCA} alt="OCA" />
                        <h4><strong>Orange Coding Academy</strong></h4>
                        <p>2024-5 - Present</p>
                        <p>6 months of intensive training bootcamp, include soft & tech. skills as: HTML, CSS, JS(React), PHP (Laravel), Python (Flask).</p>
                    </div>
                </div>
            </div>
        </section>
    );
}