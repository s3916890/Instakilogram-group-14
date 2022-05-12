     let fetches = fetch("../database/post.db");
     fetches
        .then(res => res.json())
        .then(data => {
            for (let i = 0; i < data.length; i++){
                console.log(data[i]["postID"])
            }
        })
