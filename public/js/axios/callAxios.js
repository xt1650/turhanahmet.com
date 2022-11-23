function PrepareAxiosCall(method = 'post',url,data) {
    // Send a POST request
    return axios({
        method: method,
        url: url,
        data: data
    })
}
