import React from "react";
import Layout from "../../../Layouts/User";
import { Inertia } from "@inertiajs/inertia";
import { Link, Head } from "@inertiajs/inertia-react";
import { FiChevronRight } from "react-icons/fi";
import { FcRemoveImage } from "react-icons/fc";

export default function JuzIndex({ quran_juzs, current_route }) {
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
                    <div className="row g-3">
                        { (quran_juzs.length > 0) ? quran_juzs.map((item, index) => (
                        <div className="col-12 col-md-6 col-lg-3" key={index}>
                            <div className="card">
                                <Link href={`/u/hafalan-quran/juz/${item.index}`} className="card-header d-flex align-items-center justify-content-between pb-2">
                                    <h3 className="fs-5 mb-0">{item.name}</h3>
                                    <FiChevronRight />
                                </Link>
                                <div className="card-footer pt-0">
                                    <div className="progress-wrapper d-flex align-items-center">
                                        <div className="progress-info">
                                            <div className="progress-percentage">
                                                <span className="text-xs me-2">{item.index * 3}%</span>
                                            </div>
                                        </div>
                                        <div className="progress w-100">
                                            <div className="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style={{ width: `${item.index * 3}%` }}></div>
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