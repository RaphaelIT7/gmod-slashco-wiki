<function name="MaxVec" parent="SlashCo" type="libraryfield">
	<description>
		The map's maximum world-space corner.<br>
		Computed by <page>SlashCo.InitMapMesh</page> from the world's brush surfaces (ignoring nodraw/sky/water surfaces), or from `game.GetWorld():GetModelBounds()` if the world has no brush surfaces at all.
		<note>
			You should never **modify** it yourself!
		</note>
	</description>
	<realm>Server</realm>
	<value>Vector</value>
</function>
