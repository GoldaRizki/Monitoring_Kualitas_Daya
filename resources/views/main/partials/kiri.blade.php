    
	@php
		$data_terakhir = $pengukuran->last();
	@endphp
	<div class="container-fluid sticky-top px-0" style="top: 20px;">
			<!--begin::Mixed Widget 5-->
			<div class="card">
				<!--begin::Beader-->
				<div class="card-header border-0 pt-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bolder fs-3 mb-1">Pengukuran Terakhir</span>
						<span class="text-muted fw-bold fs-7">Recent Measurements</span>
					</h3>
					
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2 d-flex flex-column">
				
					<!--begin::Items-->
					<div>
						<!--begin::Item-->
						<div class="d-flex flex-stack mb-2">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40px me-3">
									<div class="symbol-label bg-light">
	
										<i class="bi bi-speedometer text-info fs-2x"></i>
									</div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div>
									<a href="#" class="fs-7 text-gray-800 text-hover-primary fw-bolder">Tegangan</a>
									<div class="fs-9 text-muted fw-bold mt-1">Voltage</div>
								</div>
								<!--end::Title-->
							</div>
							<!--end::Section-->
							<!--begin::Label-->
							<div id="label_tegangan" class="badge fs-7 badge-secondary fw-bold py-3 px-3">{{ $data_terakhir->tegangan }} V</div>
							<!--end::Label-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-stack mb-2">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40px me-3">
									<div class="symbol-label bg-light">
										<i class="bi bi-speedometer text-danger fs-2x"></i>
									</div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div>
									<a href="#" class="fs-7 text-gray-800 text-hover-primary fw-bolder">Arus</a>
									<div class="fs-9 text-muted fw-bold mt-1">Current</div>
								</div>
								<!--end::Title-->
							</div>
							<!--end::Section-->
							<!--begin::Label-->
							<div id="label_arus" class="badge fs-7 badge-secondary fw-bold py-3 px-3">{{ $data_terakhir->arus }} A</div>
							<!--end::Label-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-stack mb-2">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40px me-3">
									<div class="symbol-label bg-light">
									<i class="bi bi-speedometer text-primary fs-2x"></i>
									</div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div>
									<a href="#" class="fs-7 text-gray-800 text-hover-primary fw-bolder">Faktor Daya</a>
									<div class="fs-9 text-muted fw-bold mt-1">Power Factor</div>
								</div>
								<!--end::Title-->
							</div>
							<!--end::Section-->
							<!--begin::Label-->
							<div id="label_faktor_daya" class="badge fs-7 badge-secondary fw-bold py-3 px-3">{{ $data_terakhir->faktor_daya }}</div>
							<!--end::Label-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-stack mb-2">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40px me-3">
									<div class="symbol-label bg-light">
										<i class="bi bi-speedometer text-warning fs-2x"></i>
									</div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div>
									<a href="#" class="fs-7 text-gray-800 text-hover-primary fw-bolder">Frekuensi</a>
									<div class="fs-9 text-muted fw-bold mt-1">Frequency</div>
								</div>
								<!--end::Title-->
							</div>
							<!--end::Section-->
							<!--begin::Label-->
							<div id="label_frekuensi" class="badge fs-7 badge-secondary fw-bold py-3 px-3">{{ $data_terakhir->frekuensi }} Hz</div>
							<!--end::Label-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-stack mb-2">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40px me-3">
									<div class="symbol-label bg-light">
										<i class="bi bi-lightning-charge text-primary fs-2x"></i>
									</div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div>
									<a href="#" class="fs-7 text-gray-800 text-hover-primary fw-bolder">Daya Aktif</a>
									<div class="fs-9 text-muted fw-bold mt-1">Active Power</div>
								</div>
								<!--end::Title-->
							</div>
							<!--end::Section-->
							<!--begin::Label-->
							<div id="label_daya_aktif" class="badge fs-7 badge-secondary fw-bold py-3 px-3">{{ $data_terakhir->daya_aktif }} W</div>
							<!--end::Label-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-stack mb-2">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40px me-3">
									<div class="symbol-label bg-light">
										<i class="bi bi-lightning-charge text-primary fs-2x"></i>
									</div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div>
									<a href="#" class="fs-7 text-gray-800 text-hover-primary fw-bolder">Daya Reaktif</a>
									<div class="fs-9 text-muted fw-bold mt-1">Reactive Power</div>
								</div>
								<!--end::Title-->
							</div>
							<!--end::Section-->
							<!--begin::Label-->
							<div id="label_daya_reaktif" class="badge fs-7 badge-secondary fw-bold py-3 px-3">{{ $data_terakhir->daya_reaktif }} VAr</div>
							<!--end::Label-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-stack mb-2">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40px me-3">
									<div class="symbol-label bg-light">
										<i class="bi bi-lightning-charge text-primary fs-2x"></i>
									</div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div>
									<a href="#" class="fs-7 text-gray-800 text-hover-primary fw-bolder">Daya Semu</a>
									<div class="fs-9 text-muted fw-bold mt-1">Apparent Power</div>
								</div>
								<!--end::Title-->
							</div>
							<!--end::Section-->
							<!--begin::Label-->
							<div id="label_daya_semu" class="badge fs-7 badge-secondary fw-bold py-3 px-3">{{ $data_terakhir->daya_semu }} W</div>
							<!--end::Label-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-stack mb-2">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40px me-3">
									<div class="symbol-label bg-light">
										<i class="bi bi-lightning-charge text-info fs-2x"></i>
									</div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div>
									<a href="#" class="fs-7 text-gray-800 text-hover-primary fw-bolder">Total Daya Aktif</a>
									<div class="fs-9 text-muted fw-bold mt-1">Total Active Power</div>
								</div>
								<!--end::Title-->
							</div>
							<!--end::Section-->
							<!--begin::Label-->
							<div id="label_total_daya_aktif" class="badge fs-7 badge-secondary fw-bold py-3 px-3">{{ $data_terakhir->total_daya_aktif }} W</div>
							
							<!--end::Label-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-stack mb-2">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40px me-3">
									<div class="symbol-label bg-light">
										<i class="bi bi-lightning-charge text-info fs-2x"></i>
									</div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div>
									<a href="#" class="fs-7 text-gray-800 text-hover-primary fw-bolder">Total Daya Reaktif</a>
									<div class="fs-9 text-muted fw-bold mt-1">Total Reactive Power</div>
								</div>
								<!--end::Title-->
							</div>
							<!--end::Section-->
							<!--begin::Label-->
							<div id="label_total_daya_reaktif" class="badge fs-7 badge-secondary fw-bold py-3 px-3">{{ $data_terakhir->total_daya_reaktif }} VAr</div>
							<!--end::Label-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-stack mb-2">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40px me-3">
									<div class="symbol-label bg-light">
										<i class="bi bi-lightning-charge text-info fs-2x"></i>
									</div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div>
									<a href="#" class="fs-7 text-gray-800 text-hover-primary fw-bolder">Total Daya Semu</a>
									<div class="fs-9 text-muted fw-bold mt-1">Total Apparent Power</div>
								</div>
								<!--end::Title-->
							</div>
							<!--end::Section-->
							<!--begin::Label-->
							<div id="label_total_daya_semu" class="badge fs-7 badge-secondary fw-bold py-3 px-3">{{ $data_terakhir->total_daya_semu }} VA</div>
							<!--end::Label-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-stack mb-2">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40px me-3">
									<div class="symbol-label bg-light">
										<i class="bi bi-lightning-charge text-info fs-2x"></i>
									</div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div>
									<a href="#" class="fs-7 text-gray-800 text-hover-primary fw-bolder">Total Faktor Daya</a>
									<div class="fs-9 text-muted fw-bold mt-1">Total Power Factor</div>
								</div>
								<!--end::Title-->
							</div>
							<!--end::Section-->
							<!--begin::Label-->
							<div id="label_total_faktor_daya" class="badge fs-7 badge-secondary fw-bold py-3 px-3">{{ $data_terakhir->total_faktor_daya }}</div>
							<!--end::Label-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-stack mb-2">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40px me-3">
									<div class="symbol-label bg-light">
										<i class="bi bi-lightning-charge-fill fs-2x text-danger"></i>
									</div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div>
									<a href="#" class="fs-7 text-gray-800 text-hover-primary fw-bolder">Daya Reaktif yang diminta</a>
									<div class="fs-9 text-muted fw-bold mt-1">Reactive Power Demand</div>
								</div>
								<!--end::Title-->
							</div>
							<!--end::Section-->
							<!--begin::Label-->
							<div id="label_reactive_power_demand" class="badge fs-7 badge-secondary fw-bold py-3 px-3">{{ $data_terakhir->reactive_power_demand }} VAr</div>
							<!--end::Label-->
						</div>
						<!--end::Item-->
						
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<div class="d-flex align-items-center me-2">
								<!--begin::Symbol-->
								<div class="symbol symbol-40px me-3">
									<div class="symbol-label bg-light">
									
										<i class="bi bi-lightning-charge-fill fs-2x text-danger"></i>
									</div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div class="py-1">
									<a href="#" class="fs-7 text-gray-800 text-hover-primary fw-bolder">Daya Tampak yang diminta</a>
									<div class="fs-9 text-muted fw-bold mt-1">Apparent Power Demand</div>
								</div>
								<!--end::Title-->
							</div>
							<!--end::Section-->
							<!--begin::Label-->
							<div id="label_active_power_demand" class="badge fs-7 badge-secondary fw-bold py-3 px-3">{{ $data_terakhir->apparent_power_demand }} W</div>
							<!--end::Label-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Items-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Mixed Widget 5-->
    </div>