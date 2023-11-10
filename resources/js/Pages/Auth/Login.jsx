import React, { useState } from "react";
import Layout from "../../Layouts/Auth";
import { Link, Head, usePage } from '@inertiajs/inertia-react';
import { Inertia } from "@inertiajs/inertia";

export default function Login() {
	const { errors } = usePage().props;
	const [email, setEmail] = useState('');
	const [password, setPassword] = useState('');
	const storeLogin = async (e) => {
		e.preventDefault();

		Inertia.post(`/login`, {
			email: email,
			password: password
		});
	}

	return (
		<>
			<Head>
				<title>Login Account</title>
			</Head>
			<Layout>
				<section>						
					<form onSubmit={storeLogin}>
						<div>
							<input type="email" placeholder="Email" aria-label="Email" onChange={(e) => setEmail(e.target.value)}/>
							{ errors.email && (
								errors.email
							) }
						</div>
						<div className="mb-3">
							<input type="password" placeholder="Password" aria-label="Password" onChange={(e) => setPassword(e.target.value)}/>
							{ errors.password && (
								errors.password
							) }
						</div>
						<div>
							<button type="submit">Log in</button>
						</div>
					</form>
				</section>
			</Layout>
		</>
	)
}