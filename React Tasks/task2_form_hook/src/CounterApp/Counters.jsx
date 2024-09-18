import './counter.css'
import { useState,useEffect } from "react";

export default function Counter() {
    const [counter, setCounter] = useState(0)

    useEffect(()=>{
        console.log("increased")
    },[counter])

    const incr = () => {
        setCounter(counter+1)
    }

    return(
        <>
        <div id="container">
            <div className="form-wrap">
                <h1>Counter App</h1>
                <p>{counter}</p>
                <button onClick={incr} className="button">1st counter</button>
                <button className="button">2nd counter</button>
            </div>
        </div>
        </>
    )
}