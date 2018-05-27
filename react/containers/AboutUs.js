import React, { Component } from "react";
import ReactDOM from "react-dom";

class AboutUsContainer extends Component {

    componentDidMount() {
        window.onhashchange = (e) => {
            window.location.pathname = "/";
        };
    };

    render() {
        return (
            <div className="card mb-4 my-4">
                <img className="card-img-top" src="https://www.bankedge.in/wp-content/uploads/2016/09/about-us-bg.jpg" alt="About Us" title="About Us"/>
                <div className="card-body">
                    <h2 className="card-title">test</h2>
                    <p className="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper velit a mi aliquam, at vehicula turpis bibendum. Cras ac posuere nulla. Proin viverra tellus a libero laoreet laoreet a vitae ipsum. Aenean at tortor arcu. Donec elit nunc, porta sed metus ut, sodales laoreet diam. Sed ac rutrum urna. Donec fermentum consectetur vulputate. Aenean ac dolor volutpat, rhoncus erat ut, ornare ante. Proin at pretium ex, at fringilla augue. Aenean sollicitudin laoreet nibh, nec elementum orci feugiat nec. Vestibulum ex purus, pharetra id risus at, bibendum fringilla tortor. Vivamus tempor ullamcorper urna, sit amet dapibus dui vehicula sed.

                        Integer nec purus at nisl tincidunt volutpat a id quam. Pellentesque accumsan sem magna, sit amet bibendum dui dapibus ac. Phasellus ac arcu a neque laoreet condimentum eu ac eros. Aenean quis aliquet leo, vel ultrices nisl. Nam scelerisque elit ac odio condimentum tincidunt. Etiam in nulla arcu. Mauris varius ut libero fermentum efficitur. Morbi maximus commodo metus id mollis. Nullam enim metus, efficitur in dui vitae, porttitor tincidunt leo. Nulla tortor arcu, blandit sed efficitur eu, ornare a magna. Pellentesque ut posuere risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse lobortis condimentum lectus, non feugiat dolor.
                    </p>
                </div>
                <div className="card-footer text-muted">&nbsp;</div>
            </div>
        );
    }

}

export default AboutUsContainer;

const appRootWrapper = document.getElementById("appRoot");
appRootWrapper ? ReactDOM.render(<AboutUsContainer />, appRootWrapper) : false;