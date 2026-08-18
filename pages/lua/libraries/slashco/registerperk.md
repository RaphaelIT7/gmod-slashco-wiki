<function name="RegisterPerk" parent="SlashCo" type="libraryfunc">
	<description>
		Registers a perk and associates it with its team.<br>
		Registration is rejected after perks have finished loading.<br>
		Default values are applied for the perk's level and price.<br>
		Conflict IDs are also converted into lookup keys within the `Conflicts` table.
	</description>
	<realm>Shared</realm>
	<group>Perks</group>
	<args>
		<arg name="perkTbl" type="table">Perk definition table to register</arg>
		<arg name="perkID" type="string">Unique identifier for the perk</arg>
	</args>
</function>