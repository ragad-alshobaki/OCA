import './CSS/Form.css'
import { useState,useEffect } from "react";

export default function Form() {
    const [formInputsValue, setFormInput] = useState({name:"", email: ""});
    useEffect(()=>{
        console.log(formInputsValue);
    },[formInputsValue])

    return(
        <div id="container">
            <div className="form-wrap">
                <h1>Sign Up</h1>
                <p>It's free and only takes a minute</p>
                <form onSubmit={(event)=>{event.preventDefault(); alert("Welcom", formInputsValue.name, "your Email is:", formInputsValue.email); console.log("Welcom", formInputsValue.name, "your Email is:", formInputsValue.email)}}>
                    <div className="form-group">
                      <label htmlFor="first-name">User Name</label>
                      <input value={formInputsValue.name} onChange={(event)=>{setFormInput({name: event.target.value, email: formInputsValue.email})}} type="text" name="firstName" id="first-name" />
                    </div>
                    <div className="form-group">
                      <label htmlFor="email">Email</label>
                      <input value={formInputsValue.email} onChange={(event)=>{setFormInput({email: event.target.value, name: formInputsValue.name})}} type="email" name="email" id="email" />
                    </div>
                    <button type="submit" className="btn">Sign Up</button>
              </form>
            </div>
        </div>
    )
}