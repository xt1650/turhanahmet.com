function BasicProfile(url,data) {
    // Send a POST request
    return axios({
        method: 'post',
        url: url,
        data: data
    })  .then(function (response) {
        console.log(response);
    });
}
