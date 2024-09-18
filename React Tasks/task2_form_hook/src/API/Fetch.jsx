import './fetch.css'
import { useState,useEffect } from "react";

export default function Fetch() {
    const [posts, setPosts] = useState([]);  // State to hold the posts
    useEffect(()=>{
        fetch('https://jsonplaceholder.typicode.com/posts')
        .then(res => res.json())
        .then(data => {setPosts(data); console.log(data)})
    },[])
    return(
        <>
        <div id="container">
        <div className="form-wrap">
            <h1>Fetch Data - API</h1>
            <p>Below Postst's data from API</p>
            {posts.map(post => (
                <div key={post.id}>
                    <div className="form-w">
                        <h4><u>Title:</u> {post.title}</h4>
                        <p><u>Content:</u> {post.body}</p>
                    </div>
                </div>
            ))}
        </div>
        </div>
        </>
    )
}