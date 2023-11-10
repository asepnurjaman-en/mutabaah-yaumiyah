import React from "react";
import Layout from "../../Layouts/User";
import { Head } from "@inertiajs/inertia-react";

export default function DashboardIndex() {
	return (
		<>
			<Head>
				<title>Dashboard</title>
			</Head>
			<Layout>
				<h1 align="center">
					Dashboard
				</h1>
			</Layout>
		</>
	)
}