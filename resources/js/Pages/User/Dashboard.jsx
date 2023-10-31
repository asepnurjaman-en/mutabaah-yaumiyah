import React from "react";
import Layout from "../../Layouts/User";
import { Link, Head, usePage } from "@inertiajs/inertia-react";
import { FiUsers, FiCast } from "react-icons/fi";

export default function DashboardIndex({ data, current_route }) {
	const breadcrumb = [
		{
			url: `#`,
			text: `Dashboard`
		}
	];
	const { auth } = usePage().props;

	return (
		<>
			<Head>
				<title>{breadcrumb[breadcrumb.length -1].text}</title>
			</Head>
			<Layout route={current_route} breadcrumb={breadcrumb}>
				<div className="container-fluid py-4">
					<div className="row g-3">
						<div className="col-lg-6">
							<div className="row g-3 mb-3">
								<div className="col-12 col-lg-6 col-sm-60">
									<div className="card">
										<div className="card-body p-3">
											<div className="row">
												<div className="col-8">
													<div className="numbers">
														<p className="text-sm mb-0 font-weight-bold">We have</p>
														<h5 className="font-weight-bolder fs-3 mb-0">
															{data.students}
														</h5>
														<p className="text-sm mb-0">Participants</p>
													</div>
												</div>
												<div className="col-4">
													<div className="icon icon-shape bg-gradient-default shadow rounded-circle d-flex align-items-center justify-content-center flex-end">
														<FiUsers className="text-danger fs-4" />
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div className="col-12 col-lg-6 col-sm-60">
									<div className="card">
										<div className="card-body p-3">
											<div className="row">
												<div className="col-8">
													<div className="numbers">
														<p className="text-sm mb-0 font-weight-bold">We has</p>
														<h5 className="font-weight-bolder fs-3 mb-0">
															{data.meetings}
														</h5>
														<p className="text-sm mb-0">Meetings</p>
													</div>
												</div>
												<div className="col-4">
													<div className="icon icon-shape bg-gradient-default shadow rounded-circle d-flex align-items-center justify-content-center flex-end">
														<FiCast className="text-danger fs-4" />
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div className="card mb-3">
								<div className="card-header pb-0 p-3">
									<h6 className="mb-0">Meetings ongoing</h6>
								</div>
								<div className="card-body p-3">
									<ul className="list-group">
										<li className="list-group-item border-0">
											<div className="text-muted text-center opacity-5 p-3">No meeting</div>
										</li>
									</ul>
								</div>
							</div>
							<div className="card">
								<div className="card-header pb-0 p-3">
									<h6 className="mb-0">Meetings scheduled</h6>
								</div>
								<div className="card-body p-3">
									<ul className="list-group">
										<li className="list-group-item border-0">
											<div className="text-muted text-center opacity-5 p-3">No meeting</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div className="col-lg-6">
							
						</div>
					</div>
				</div>
			</Layout>
		</>
	)
}