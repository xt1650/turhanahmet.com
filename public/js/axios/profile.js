function BasicProfile(url,data,sendFile=false) {
    // Send a POST request
    let headers = sendFile ? {"Content-Type": "multipart/form-data"} : '';
    return axios({
        method: 'post',
        url: url,
        data: data,
        headers: headers,
    });
}
