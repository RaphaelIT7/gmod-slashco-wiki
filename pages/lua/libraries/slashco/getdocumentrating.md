<function name="GetDocumentRating" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the local player's stored rating for the given document, or `0` if it hasn't been collected.
	</description>
	<realm>Client</realm>
	<group>Documents</group>
	<args>
		<arg name="name" type="string">Name of the document to check.</arg>
	</args>
	<rets>
		<ret name="rating" type="number">The document's rating, from 0 to 3.</ret>
	</rets>
</function>
