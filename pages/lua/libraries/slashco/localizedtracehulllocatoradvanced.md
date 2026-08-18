<function name="LocalizedTraceHullLocatorAdvanced" parent="SlashCo" type="libraryfunc">
	<description>
		<deprecated>
			Use the new version <page>SlashCo.LocalizedTraceHullLocator</page>
		</deprecated>
		Alias of <page>SlashCo.LocalizedTraceHullLocator</page>
	</description>
	<realm>Server</realm>
	<args>
		<arg name="ent" type="Entity">entity to use as centery</arg>
		<arg name="minRange" type="number">minimum distance away</arg>
		<arg name="range" type="number" default="minRange">
			maximum distance away<br>
			If range is unspecified, minRange becomes the range value and the minimum range becomes 25
		</arg>
		<arg name="offset" type="number" default="0">
			offset the center of the search this many units way from the entity in the direction they are looking
		</arg>
	</args>
	<rets>
		<ret name="randomPos" type="Vector">A found random position or `nil` on failure</ret>
	</rets>
</function>