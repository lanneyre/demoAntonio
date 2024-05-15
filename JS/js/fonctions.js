(() => {
    let fig = document.querySelectorAll("#carroussel figure")
    fig[0].classList.add("show")
    fig[1].classList.add("show")

    document.getElementById("fg").addEventListener("click", () => {
        let figureShow = document.querySelectorAll("#carroussel figure.show")
        figureShow[1].classList.remove("show");
        let g = parseInt(figureShow[0].getAttribute("tabindex") - 1)
        document.getElementById("images").classList.remove("inverse")
        if (g == 0) {
            if (parseInt(figureShow[1].getAttribute("tabindex")) - parseInt(figureShow[0].getAttribute("tabindex")) == 1) {
                document.getElementById("images").classList.add("inverse")
                document.querySelector("figure[tabindex='7']").classList.add("show")
            } else {
                document.querySelector("figure[tabindex='1']").classList.remove("show")
                document.querySelector("figure[tabindex='6']").classList.add("show")
                document.querySelector("figure[tabindex='7']").classList.add("show")
            }
        } else {
            document.querySelector("figure[tabindex='" + g + "']").classList.add("show")

        }
    })


    document.getElementById("fd").addEventListener("click", () => {
        let figureShow = document.querySelectorAll("#carroussel figure.show")
        figureShow[0].classList.remove("show");
        let g = parseInt(figureShow[1].getAttribute("tabindex")) + 1
        document.getElementById("images").classList.remove("inverse")
        if (g == 8) {
            if (parseInt(figureShow[1].getAttribute("tabindex")) - parseInt(figureShow[0].getAttribute("tabindex")) == 1) {
                document.getElementById("images").classList.add("inverse")
                document.querySelector("figure[tabindex='1']").classList.add("show")
            } else {
                document.querySelector("figure[tabindex='7']").classList.remove("show")
                document.querySelector("figure[tabindex='1']").classList.add("show")
                document.querySelector("figure[tabindex='2']").classList.add("show")
            }

        } else {
            document.querySelector("figure[tabindex='" + g + "']").classList.add("show")
        }
    })
})()