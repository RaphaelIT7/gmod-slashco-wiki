<function name="GetPerk" parent="SlashCo" type="libraryfunc">
	<description>
		Returns a registered perk by its ID.
	</description>
	<realm>Shared</realm>
	<group>Perks</group>
	<args>
		<arg name="perkID" type="string">ID of the perk to retrieve</arg>
	</args>
	<rets>
		<ret name="perkTbl" type="table">The registered perk table or `nil` if the perk does not exist</ret>
	</rets>
</function>