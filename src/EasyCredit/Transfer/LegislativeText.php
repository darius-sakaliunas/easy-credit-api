<?php

namespace EasyCredit\Transfer;

/**
 * Class LegislativeText
 * @package EasyCredit\Transfer
 */
class LegislativeText extends BaseResponse
{

    /**
     * @param string $companyName
     *
     * @return string
     */
    public function getDataProcessingPaymentPage($companyName)
    {
        return <<< EOT
Ja, ich möchte per Ratenkauf zahlen und willige ein, dass $companyName zur Identitäts- und Bonitätsprüfung sowie Betrugsprävention der TeamBank AG (Partner der Genossenschaftlichen FinanzGruppe Volksbanken Raiffeisenbanken, Beuthener Str. 25, 90471 Nürnberg) Anrede und Name, Geburtsdatum und -ort, Kontaktdaten (Adresse, Telefon, E-Mail) sowie Angaben zur aktuellen und zu früheren Bestellungen übermittelt und das Prüfungsergebnis zu diesem Zweck erhält.

Weiterhin willige ich zu diesem Zweck in die Erhebung und Verarbeitung meiner personenbezogenen Daten durch die TeamBank AG und deren Kooperationspartner RiskIdent GmbH ein. 
Näheres siehe unter den Erläuterungen.
EOT;
    }

    /**
     * @return string
     */
    public function getDataProcessingServiceIntegration()
    {
        return <<< EOT
Hiermit erteile ich die Einwilligung in die Erhebung und Verarbeitung meiner personenbezogenen Daten durch die TeamBank AG (Partner der Genossenschaftlichen FinanzGruppe Volksbanken Raiffeisenbanken) und deren Kooperationspartner Risk.Ident GmbH. Die Erhebung und Verarbeitung erfolgt zum Zweck der Bonitäts- und Identitätsprüfung sowie Betrugsprävention.
EOT;
    }

    /**
     * @return string
     */
    public function getAgreementServiceIntegration()
    {
        return <<< EOT
Einwilligung in die Verarbeitung meiner personenbezogenen Daten durch die Team-Bank AG und Auskunfteien

Einwilligung zur Übermittlung von Daten an Auskunfteien (Schufa und andere)

Ich willige darin ein, dass die TeamBank AG Nürnberg, Beuthener Straße 25, 90471 Nürnberg der SCHUFA Holding AG, Kormoranweg 5, 65201 Wiesbaden, der infoscore Consumer Data GmbH, Rheinstr. 99, 76532 Baden-Baden und der Creditreform Boniversum GmbH, Hellersbergerstr. 11, 41460 Neuss (in dieser Einwilli-gungserklärung und im Folgenden auch insgesamt als „Auskunfteien“ bezeichnet) meinen Namen, Anschrift und Geburtsdatum zur Identitäts- und Bonitätsprüfung übermittelt und zu diesem Zweck Auskünfte über mich erhält.

Darüber hinaus willige ich darin ein, dass die TeamBank AG meine Angaben zur Bankverbindung (insbesondere IBAN bzw. Bankleitzahl und Kontonummer) zum Zwecke der Kontonummernprüfung an die SCHUFA übermittelt und von dieser Aus-kunft erhält, ob die von mir gemachten Angaben zur Bankverbindung plausibel sind und ob diese in ihrem Datenbestand gespeichert sind.
Einwilligung in die Erhebung und Speicherung von Daten durch Risk.Ident sowie zur Übermittlung von Daten an die Risk.Ident GmbH

Zur Vermeidung von Betrugsfällen im Rahmen eines Ratenkaufs greift die TeamBank beim Betrieb dieser Website auf die Dienste der Risk.Ident GmbH (im folgenden „Kooperationspartner“) zurück. Der Kooperationspartner erhebt, verarbeitet und nutzt mit Hilfe von Cookies und anderen Tracking-Technologien Daten zur Er-mittlung des vom Besucher dieser Website verwendeten Endgeräts (Browserdaten, wie z.B. Browserversion, Auflösung etc.) und weiterer Daten über die Nutzung der Website (wie z.B. Namen bzw. Domain der Website, Durchführung einer Bestellung etc.). Soweit durch den Kooperationspartner IP- Adressen erhoben werden, werden diese Adressen vor der Verarbeitung und Nutzung gekürzt, sodass kein Personen-bezug der IP-Adressen mehr hergestellt werden kann. Die Daten werden von dem Kooperationspartner in einer Datenbank zur Betrugsprävention hinterlegt. In der Datenbank des Kooperationspartners werden auch von der TeamBank übermittelte Daten zu Endgeräten gespeichert, unter deren Verwendung es bereits zu betrügeri-schem Verhalten gekommen ist. Nach 12 Monaten werden die Daten in der Daten-bank wieder gelöscht.

Im Rahmen eines Anmelde- bzw. Bestellprozesses auf dieser Website ruft die TeamBank aus der Datenbank des Kooperationspartners eine Risikobewertung zum Endgerät des Nutzers ab. Diese Risikobewertung zur Wahrscheinlichkeit eines Be-trugsversuchs berücksichtigt u.a., ob das Endgerät sich über verschiedene Service-Provider eingewählt hat, ob das Endgerät eine häufig wechselnde Geo-Referenz aufweist, wie viele Transaktionen über das Endgerät getätigt wurden und ob eine Proxy-Verbindung genutzt wird.

Ich willige darin ein, dass die Risk Ident GmbH die obengenannten Daten aus dem Besuch dieser Website erhebt und speichert sowie die TeamBank AG zum Zweck der Betrugsprävention der Risk.Ident GmbH die oben genannten Daten übermittelt und von dieser eine Risikobewertung zum Endgerät des Nutzers erhält.
Hinweise zur Übermittlung weiterer Daten an Auskunfteien

Die TeamBank AG wird der SCHUFA Holding AG, der infoscore Consumer Data GmbH und der Creditreform Boniversum GmbH auch Daten über ihre gegen mich bestehenden fälligen Forderungen nach Maßgabe des § 28 a BDSG übermitteln, welche sie von <HAENDLERNAME> übernommen hat, wenn ich die geschuldete Leistung trotz Fälligkeit nicht erbracht habe, die Übermittlung zur Wahrung berech-tigter Interessen der TeamBank AG oder Dritter erforderlich ist und

die Forderung vollstreckbar ist oder ich die Forderung ausdrücklich anerkannt habe;
ich nach Eintritt der Fälligkeit der Forderung mindestens zweimal schriftlich ge-mahnt worden bin und
zwischen der ersten Mahnung und der Übermittlung mindestens vier Wochen lie-gen,
die TeamBank AG mich rechtzeitig, jedoch frühestens bei der ersten Mahnung, über die bevorstehende Übermittlung unterrichtet hat und ich die Forderung nicht be-stritten habe;
das der Forderung zugrunde liegende Vertragsverhältnis aufgrund von Zahlungs-rückständen fristlos gekündigt werden kann und die TeamBank AG mich über die bevorstehende Übermittlung unterrichtet hat.

Darüber hinaus wird die TeamBank AG der SCHUFA Holding AG, der infoscore Con-sumer Data GmbH und der Creditreform Boniversum GmbH auch Daten über sons-tiges nichtvertragsgemäßes Verhalten (z.B. betrügerisches Verhalten) übermitteln. Diese Meldungen dürfen nach dem Bundesdatenschutzgesetz (§ 28 Absatz 2 BDSG) nur erfolgen, soweit dies zur Wahrung berechtigter Interessen der TeamBank AG oder Dritter erforderlich ist und kein Grund zu der Annahme besteht, dass das schutzwürdige Interesse des Betroffenen an dem Ausschluss der Übermittlung überwiegt.

Insoweit befreie ich die TeamBank AG zugleich vom Bankgeheimnis.

Die Auskunfteien speichern und nutzen die erhaltenen Daten wie folgt:

Die Nutzung der Daten durch die Schufa umfasst auch die Errechnung eines Wahr-scheinlichkeitswertes auf Grundlage des SCHUFA-Datenbestandes zur Beurteilung des Kreditrisikos (Score). Die erhaltenen Daten übermittelt sie an ihre Vertrags-partner im Europäischen Wirtschaftsraum und der Schweiz, um diesen Informatio-nen zur Beurteilung der Kreditwürdigkeit von natürlichen Personen zu geben. Ver-tragspartner der SCHUFA sind Unternehmen, die aufgrund von Leistungen oder Lie-ferung finanzielle Ausfallrisiken tragen (insbesondere Kreditinstitute sowie Kredit-karten- und Leasinggesellschaften, aber auch etwa Vermietungs-, Handels-, Tele-kommunikations-, Energieversorgungs-, Versicherungs- und Inkassounternehmen). Die SCHUFA stellt personenbezogene Daten nur zur Verfügung, wenn ein berechtig-tes Interesse hieran im Einzelfall glaubhaft dargelegt wurde und die Übermittlung nach Abwägung aller Interessen zulässig ist. Daher kann der Umfang der jeweils zur Verfügung gestellten Daten nach Art der Vertragspartner unterschiedlich sein. Darüber hinaus nutzt die SCHUFA die Daten zur Prüfung der Identität und des Al-ters von Personen auf Anfrage ihrer Vertragspartner, die beispielsweise Dienstleis-tungen im Internet anbieten.

Ich kann Auskunft bei der SCHUFA über die mich betreffenden gespeicherten Daten erhalten. Weitere Informationen über das SCHUFA-Auskunfts- und Score-Verfahren sind unter www.meineschufa.de abrufbar. Die postalische Adresse der SCHUFA lau-tet: SCHUFA Holding AG, Privatkunden ServiceCenter, Postfach 10 34 41, 50474 Köln.

Die Nutzung der Daten durch die infoscore Consumer Data GmbH und die Creditre-form Boniversum GmbH kann auch die Errechnung eines Wahrscheinlichkeitswertes auf der Basis mathematisch-statistischer Verfahren auf Grundlage des Datenbe-standes unter Verwendung von Anschriftendaten zur Beurteilung des Kreditrisikos (Score) umfassen. Diese Daten übermitteln die infoscore Consumer Data GmbH und die Creditreform Boniversum GmbH an ihre Vertragspartner (z.B. Kreditinstitute, Kreditkartenunternehmen, Leasinggesellschaften, Versicherungs- und Inkassoun-ternehmen, Vermietungs-, Handels-, Telekommunikations- und Energieversor-gungsunternehmen), um diesen Informationen zur Beurteilung der Kreditwürdigkeit von natürlichen Personen zu geben. An Unternehmen, die gewerbsmäßig Forderun-gen einziehen, können zur Schuldnerermittlung Adressdaten übermittelt werden. Die infoscore Consumer Data GmbH und die Creditreform Boniversum GmbH stellen personenbezogene Daten ihren Vertragspartnern nur zur Verfügung, wenn ein be-rechtigtes Interesse an der Datenübermittlung im Einzelfall glaubhaft dargelegt wurde und die Übermittlung nach Abwägung aller Interessen zulässig ist.

Ich kann bei der infoscore Consumer Data GmbH, Rheinstr. 99, 76532 Baden-Baden und der Creditreform Boniversum GmbH, Hellersbergerstr. 11, 41460 Neuss Auskunft über die mich betreffenden gespeicherten Daten erhalten.
Hinweise zum Scoring

Für die Erstellung eines Teilzahlungsangebots verwendet die TeamBank eine auto-matisierte Kreditentscheidung. Hierbei nutzt die TeamBank zur Bewertung Ihrer Bonität einen von der Schufa gelieferten Scorewert. Zudem fließen Auskünfte Dritter (Daten, die mit Ihrer Zustimmung von Auskunfteien übermittelt werden) sowie gegebenenfalls eigene Erfahrungen, die die TeamBank mit Ihnen als Kunde gemacht hat, ein.

Das Verfahren ist auf vergangenheitsbezogenen Werten konzipiert. Die Entschei-dung beruht somit nicht auf einem einzelnen Merkmal, sondern auf einem in der Ausprägung der einzelnen Kriterien variablen Punktesystem.

Sie haben die Möglichkeit, die Entscheidung der TeamBank überprüfen zu lassen.
EOT;
    }
}
