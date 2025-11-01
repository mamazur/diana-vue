export interface OfferSection {
  id?: string
  titleKey: string
  paragraphKeys: string[]
  sectionTitleKey?: string
  sectionTextKey?: string
  timeKey?: string
}

export interface OfferItemData {
  titleKey: string
  detailsKey: string
  link: string
}
export interface CertificateImage {
  src: string
  alt: string
}
