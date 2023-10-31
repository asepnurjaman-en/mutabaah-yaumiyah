import React from "react";
import Layout from "../../../Layouts/User";
import { Inertia } from "@inertiajs/inertia";
import { Link, Head } from "@inertiajs/inertia-react";
import { FiChevronRight, FiAlignLeft } from "react-icons/fi";
import { FcRemoveImage } from "react-icons/fc";

export default function SurahIndex({ quran_surahs, current_route }) {
	const breadcrumb = [
		{
			url: `/dashboard`,
			text: `Dashboard`
		},
		{
			url: `#`,
			text: `Hafalan Quran`
		}
	];

	return (
		<>
			<Head>
				<title>{breadcrumb[breadcrumb.length -1].text}</title>
			</Head>
			<Layout route={current_route} breadcrumb={breadcrumb}>
				<div className="container-fluid py-4">
					<div className="position-relative clearfix mb-4 mt-1">
						<div className="bg-gray-100 rounded-3 float-end p-2">
							<Link className="d-inline-block bg-white rounded-3 shadow px-4 py-3">
								<FiAlignLeft className="me-2" />
								<span>Surah</span>
							</Link>
							<Link href="/u/hafalan-quran/juz" className="d-inline-block px-4 py-3">
								<FiAlignLeft className="me-2"/>
								<span>Juz</span>
							</Link>
						</div>
					</div>
					<div className="row g-3">
						{ (quran_surahs.length > 0) ? quran_surahs.map((item, index) => (
						<div className="col-12 col-md-6 col-lg-3" key={index}>
							<div className="card">
								<Link href={`/u/hafalan-quran/surah/${item.index}`} className="card-header d-flex align-items-center justify-content-between pb-2">
									<div>
										<small className="text-xs">Surah ke - {item.index}</small>
										<h3 className="fs-5 mb-0">{item.name}</h3>
									</div>
									<FiChevronRight />
								</Link>
								<div className="card-footer py-0">
									<span className="text-sm text-muted">{item.translation} &bull; {item.revealed}</span>
								</div>
								<div className="card-footer pt-0">
									<div className="progress-wrapper d-flex align-items-center">
										<div className="progress-info">
											<div className="progress-percentage">
												<span className="text-xs me-2">0%</span>
											</div>
										</div>
										<div className="progress w-100">
											<div className="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style={{ width: `0%` }}></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						)) :
						<div className="text-center p-5">
							<FcRemoveImage className="fs-1" />
						</div>
						}
					</div>
				</div>
			</Layout>
		</>
	);
}