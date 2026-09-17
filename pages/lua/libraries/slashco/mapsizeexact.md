<function name="MapSizeExact" parent="SlashCo" type="libraryfield">
	<description>
		The map's size as an unrounded number, calculated by <page>SlashCo.InitMapMesh</page> as `SlashCo.MaxVec:Distance(SlashCo.MinVec) / 8500`.<br>
		Falls back to `2.5` if the map bounds couldn't be determined at all.<br>
		Rounded up (via `math.ceil`) into <page>SlashCo.MapSize</page>, which is what most code should use instead.
		<note>
			You should never **modify** it yourself!
		</note>
	</description>
	<realm>Server</realm>
	<value>(calculated number)</value>
</function>
