import Location from '../images/location.png'
import Email from '../images/gmail.png'
import Call from '../images/call.png'

export default function Contact() {
    return(
        <section id="contact" style={{backgroundColor: "#393E46"}}>
        <h4>Contact Me</h4>
        <div>
            <div class="align">
                <table>
                    <tr>
                        <td>
                            <img class="icon" src={Location} alt="location" />
                        </td>
                        <td>Aqaba, Jordan</td>
                    </tr>
                    <tr>
                        <td>
                            <img class="icon" src={Email} alt="Gmail" />
                        </td>
                        <td>rgd.alshbaki@gmail.com</td>
                    </tr>
                    <tr>
                        <td>
                            <img class="icon" src={Call} alt="call" />
                        </td>
                        <td>0799756719</td>
                    </tr>
                </table>
            </div>
            <fieldset>
                <legend>Let's get in touch. Send me a message:</legend>
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Subject</label>
                        <input type="Text" class="form-control" placeholder="Enter subject" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">what are you thinking about</label>
                        <input type="Text" class="form-control" placeholder="Message" />
                      </div>
                      <br />
                    <button type="submit" class="btn btn-outline-info">... Send ...</button>
                  </form>
            </fieldset>
        </div>
    </section>
    );
}