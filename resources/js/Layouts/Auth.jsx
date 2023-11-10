import React from "react";
import 'bootstrap/dist/js/bootstrap.min.js';

function Layout({ children }) {
    return (
		<>
            <main>
                { children }
            </main>
        </>
    )
}

export default Layout