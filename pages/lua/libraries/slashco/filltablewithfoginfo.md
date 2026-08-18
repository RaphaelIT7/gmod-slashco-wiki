<function name="FillTableWithFogInfo" parent="SlashCo" type="libraryfunc">
	<description>
		Populates a table with the complete fog information applicable to a player.<br>
		The table is initialized with the global fog color and default values before player, team, or global fog settings are applied.<br>
		Scaled world color values are calculated after the applicable fog settings are merged.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="infoTbl" type="table">Table to populate with fog information</arg>
		<arg name="ply" type="Player">Player whose applicable fog information should be used</arg>
	</args>
</function>