<function name="PerkValue" parent="Player" type="classfunc">
	<description>
		Returns a value from the player's active perks.<br>
		The first active perk containing the requested value is used.<br>
		If no active perk provides the value, the fallback is returned.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="valueName" type="string">Name of the perk value to retrieve</arg>
		<arg name="fallback" type="any">Value to return when no active perk provides the requested value</arg>
	</args>
	<rets>
		<ret name="value" type="any">Value supplied by an active perk or the fallback value</ret>
	</rets>
</function>