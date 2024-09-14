import C_HTU from '../images/HTU_certificate.jpeg'
import C_SHAI from '../images/SHAI.png'

export default function Certificates() {
    return(
        <section id="cert">
        <div>
            <h4>Certificates</h4>
            <div class="gallery">
                <a target="_blank" href="./imgs/HTU certificate.jpeg">
                    <img src={C_HTU} alt="HTU Certificate" width="500" height="300" />
                  </a>
                  <div class="desc">HTU Certificate - Python</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="./imgs/SHAI.png">
                    <img src={C_SHAI} alt="SHAI Certificate" width="500" height="300" />
                  </a>
                  <div class="desc">SHAI Certificate - PoweBI</div>
            </div>
        </div>
    </section>
    );
}