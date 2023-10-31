import React from "react";
import Layout from "../../../Layouts/User";
import { Inertia } from "@inertiajs/inertia";
import { Link, Head } from "@inertiajs/inertia-react";
import { FcRemoveImage } from "react-icons/fc";

export default function SurahIndex({ quran_surah, quran_ayats, current_route }) {
	const breadcrumb = [
		{
			url: `/dashboard`,
			text: `Dashboard`
		},
		{
			url: `/u/hafalan-quran/surah`,
			text: `Hafalan Quran`
		},
		{
			url: `#`,
			text: quran_surah.name
		}
	];

	return (
		<>
			<Head>
				<title>{breadcrumb[breadcrumb.length -1].text}</title>
			</Head>
			<Layout route={current_route} breadcrumb={breadcrumb}>
				<div className="container-fluid py-4">
					<div className="card">
						<div className="table-responsive">
							<table className="table mb-0">
								<thead>
									<tr>
										<th className="border-bottom">Surah</th>
										<th className="text-center">Tes 1</th>
										<th className="text-center">Tes 2</th>
										<th className="text-center">Tes 3</th>
										<th className="text-center">Tes 4</th>
									</tr>
								</thead>
								<tbody>
									{ (quran_ayats.length > 0) ? quran_ayats.map((item, index) => (
									<tr key={index}>
										<td className="bg-gray-100 px-4">
											<h4 className="text-sm mb-0">{quran_surah.name}</h4>
											<span className="text-sm">Ayat ke - {item.index}</span>
										</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									)) :
									<tr>
										<td colSpan={5} className="text-center p-5">
											<FcRemoveImage className="fs-1" />
										</td>
									</tr>
									}
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</Layout>
		</>
	);
}