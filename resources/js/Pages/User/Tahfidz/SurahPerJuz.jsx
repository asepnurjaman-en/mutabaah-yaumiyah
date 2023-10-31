import React, { useEffect, useRef } from "react";
import Layout from "../../../Layouts/User";
import { Inertia } from "@inertiajs/inertia";
import { Link, Head } from "@inertiajs/inertia-react";
import PerfectScrollbar from "perfect-scrollbar";
import { FiChevronRight } from "react-icons/fi";
import { FcRemoveImage } from "react-icons/fc";

export default function ShowJuz({ quran_juzs, quran_juz, quran_ayat_per_juz, current_route }) {
	const breadcrumb = [
		{
			url: `/dashboard`,
			text: `Dashboard`
		},
		{
			url: `/u/hafalan-quran`,
			text: `Hafalan Quran`
		},
		{
			url: `#`,
			text: quran_juz.name
		}
	];
	const contentRef = useRef(null);
	const scrollToCurrentJuz = (id) => {
		const targetJuz = document.getElementById(id);
		if (targetJuz) {
			const offsetTop = targetJuz.offsetTop;
			contentRef.current.scrollTop = offsetTop - 20;
		}
	};
	useEffect(() => {
		scrollToCurrentJuz(`juz-${quran_juz.index}`);
		new PerfectScrollbar(document.querySelector('#side-juz-main'));
	}), [];

	return (
		<>
			<Head>
				<title>{breadcrumb[breadcrumb.length -1].text}</title>
			</Head>
			<Layout route={current_route} breadcrumb={breadcrumb}>
				<div className="container-fluid py-4">
					<div className="row g-3">
						<div className="col-12 col-lg-1">
							<div ref={contentRef} 
								className="sticky-component bg-white shadow-lg rounded-3 p-2" 
								id="side-juz-main" style={{ height: "calc(100vh - 125px)" }}>
							{ (quran_juzs.length > 0) ? quran_juzs.map((item, index) => (
								<Link href={`/u/hafalan-quran/juz/${item.id}`}
									key={index}
									id={`juz-${item.index}`}
									className={`d-flex align-items-center justify-content-between rounded-3 ps-3 pe-1 py-3 me-1 ` + ((item.id == quran_juz.id) && (`bg-gradient-success text-white`))}>
									<span className="fw-bold text-sm mb-0">{item.name}</span>
									<FiChevronRight />
								</Link>
							)) :
								<div className="text-center p-5">
									<FcRemoveImage className="fs-1" />
								</div>
							}
							</div>
						</div>
						<div className="col-12 col-lg-11">
							{ (quran_ayat_per_juz.length > 0) ? quran_ayat_per_juz.map((item, index) => (
							<div className="card card-body mb-3" key={index}>
								<div className="row g-3">
									<div className="col-12 col-md-6 col-lg-3">
										<div className="card">
											<Link href="#" className="card-header d-flex align-items-center justify-content-between pb-2">
												<h3 className="fs-5 mb-0">{item.surah.name}</h3>
												<FiChevronRight />
											</Link>
											<div className="card-footer pt-0">
												<span className="text-sm text-muted">{item.surah.translation} &bull; {item.surah.revealed}</span>
											</div>
										</div>
									</div>
									<div className="col-12 col-md-6 col-lg-9">
										<h4 className="text-sm mb-2">Hafalan per ayat</h4>
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
				</div>
			</Layout>
		</>
	);
}